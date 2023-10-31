
from rest_framework import serializers


class Serializer(serializers.Serializer):
    Response = serializers.CharField()


class ImageSerializer(serializers.Serializer):
    image = serializers.ImageField()

    def validate_image(self, value):
        # Check if the uploaded file is an image
        if not value.content_type.startswith('image'):
            raise serializers.ValidationError("Only image files are allowed.")
        return value
   