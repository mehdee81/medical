from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework.response import Response
from . serializers import Serializer
from rest_framework import status
import pickle

#   The order of sending features
#   1-Air Pollution
#   2-Alcohol use
#   3-Dust Allergy
#   4-OccuPational Hazards
#   5-Genetic Risk
#   6-chronic Lung Disease
#   7-Balanced Diet
#   8-Obesity
#   9-Smoking
#   10-Passive Smoker
#   11-Chest Pain
#   12-Coughing of Blood
#   13-Fatigue

# request with post method
# smaple: http://127.0.0.1:5000/api/lung_cancer_prediction/?Air Pollution=4&Alcohol use=5&Dust Allergy=6&OccuPational Hazards=5&Genetic Risk=5&chronic Lung Disease=4&Balanced Diet=6&Obesity=7&Smoking=2&Passive Smoker=3&Chest Pain=4&Coughing of Blood=8&Fatigue=8


class Prediction(APIView):
    def post(self, request):

        data = []
        for key, value in request.GET.items():
            data.append(int(value))
        print(data)

        loaded_model = pickle.load(open('api/knnmodel_file', 'rb'))
        result = loaded_model.predict([data])

        serializer = Serializer(data={'Response': result})
        serializer.is_valid()
        return Response(serializer.data, status=status.HTTP_200_OK)
