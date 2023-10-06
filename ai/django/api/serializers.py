from rest_framework import serializers


class Serializer(serializers.Serializer):
    Response = serializers.CharField()
