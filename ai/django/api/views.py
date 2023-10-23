from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework.response import Response
from . serializers import Serializer , ImageSerializer
from rest_framework import status
import pickle

import torch
from PIL import Image
from .cnn_model import CNNModel
from torchvision import transforms

#   The order of sending features
#   1-Air Pollution ==> 1 - 8
#   2-Alcohol use ==> 1 - 8 
#   3-Dust Allergy ==> 1 - 8
#   4-OccuPational Hazards ==> 1 - 8
#   5-Genetic Risk ==> 1 - 7
#   6-chronic Lung Disease ==> 1 - 7
#   7-Balanced Diet ==> 1 - 7
#   8-Obesity ==> 1 - 7
#   9-Smoking ==> 1 - 8
#   10-Passive Smoker ==> 1 - 8
#   11-Chest Pain ==> 1 - 9
#   12-Coughing of Blood ==> 1 - 7
#   13-Fatigue ==> 1 - 9
# 
 
# request with post method
# sample: http://127.0.0.1:5000/api/lung_cancer_prediction/


class Prediction(APIView):
    def post(self, request):

        data = []
        for key, value in request.GET.items():
            data.append(int(value))
        print(data)

        loaded_model = pickle.load(open('api/ai_models/knnmodel_file', 'rb'))
        result = loaded_model.predict([data])

        serializer = Serializer(data={'Response': result})
        serializer.is_valid()
        return Response(serializer.data, status=status.HTTP_200_OK)


# image classifier
# smaple: http://127.0.0.1:5000/api/classifie-image/
# and add image to body
# label 0 = cancer
# label 1 = normal

class ProcessImageView(APIView):
    serializer_class = ImageSerializer

    def post(self, request, format=None):
        serializer = self.serializer_class(data=request.data)
        serializer.is_valid(raise_exception=True)

        # Load the model
        model = CNNModel()
        model.load_state_dict(torch.load('api/ai_models/model.pt'))
        model.eval()

        # Define the new size for the images
        new_size = (224, 224)

        # Transform the image
        transform = transforms.Compose([
            transforms.Resize(new_size),
            transforms.ToTensor()
        ])

        # Open and transform the image
        image = Image.open(serializer.validated_data['image'])
        image = image.convert("RGB")
        vector = transform(image)
        vector = vector.unsqueeze(0)

        with torch.no_grad():
            pred_label = model(vector)
            _, pred_label = torch.max(pred_label, 1)

        # Return the predicted label as the response
        response_data = {
            'predicted_label': pred_label.item()
        }
        return Response(response_data)