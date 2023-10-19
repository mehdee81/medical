from django.urls import path
from . import views

urlpatterns = [
    path('lung_cancer_prediction/', views.Prediction().as_view()),
    path('classifie-image/', views.ProcessImageView().as_view(), name='process_image'),
]
