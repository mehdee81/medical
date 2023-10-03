#!/usr/bin/env python
# coding: utf-8

# In[4]:


import pandas as pd
from sklearn import preprocessing
from sklearn.model_selection import train_test_split
from sklearn.neighbors import KNeighborsClassifier
from sklearn import metrics
import pickle


# In[5]:


df = pd.read_csv('cleaned_dataset.csv')
print(df.shape)

# In[6]:


df.describe()


# In[7]:


df['Alcohol use'].value_counts()


# In[8]:


correlations = df.corrwith(df['Level'])
sorted_columns = correlations.sort_values(ascending=False)
print(sorted_columns)


# In[9]:


x = df.iloc[: , :-1].values
y = df["Level"].values
print(x.shape)
print(y.shape)


# In[10]:


scaler = preprocessing.StandardScaler().fit(x)
x = scaler.transform(x.astype(float))


# In[11]:


x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.2, random_state=4)
print ('Train set:', x_train.shape,  y_train.shape)
print ('Test set:', x_test.shape,  y_test.shape)


# In[12]:


k = 4
#Train Model and Predict
model = KNeighborsClassifier(n_neighbors = k).fit(x_train,y_train)
model


# In[13]:


print("Train set Accuracy: ", metrics.accuracy_score(y_train , model.predict(x_train)))
print("Test set Accuracy: " , metrics.accuracy_score(y_test  , model.predict(x_test)))


# In[14]:


import os.path

path = './knnmodel_file'

check_file = os.path.isfile(path)
if check_file == False:
    
    # Its important to use binary mode
    knnPickle = open('knnmodel_file', 'wb')

    # source, destination
    pickle.dump(model, knnPickle)

    # close the file
    knnPickle.close()
else:
    print("model already exist.")