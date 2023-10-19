import torch.nn as nn

# model
class CNNModel(nn.Module):
    def __init__(self):
        super(CNNModel, self).__init__()

        self.conv1 = nn.Conv2d(3, 16, kernel_size=3, stride=1, padding=1)
        self.conv2 = nn.Conv2d(16, 32, kernel_size=3, stride=1, padding=1)
        self.conv3 = nn.Conv2d(32, 64, kernel_size=3, stride=1, padding=1)


        self.relu = nn.ReLU()
        self.pool = nn.MaxPool2d(kernel_size=2, stride=2)
        self.flatten = nn.Flatten()


        self.fc1 = nn.Linear(50176, 64)
        self.fc2 = nn.Linear(64, 2)


    def forward(self, x):
        #layer 1
        y = self.conv1(x)
        y = self.relu(y)
        y = self.pool(y)

        #layer 2
        y = self.conv2(y)
        y = self.relu(y)
        y = self.pool(y)

        #layer 3
        y = self.conv3(y)
        y = self.relu(y)
        y = self.pool(y)

        #layer 3
        y = self.flatten(y)
        y = self.fc1(y)
        y = self.fc2(y)

        return y


