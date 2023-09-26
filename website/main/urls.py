from django import path
from . import views


urlpattern = [
  path('', views.home,name ='home'),
]