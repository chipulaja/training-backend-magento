# TrainingApi

Magento Module for training

## Installation

```sh
mkdir app/code/Icube
cd app/code/Icube
git clone https://github.com/chipulaja/training-backend-magento.git TrainingApi
cd TrainingApi
git fetch origin
git checkout api
cd ../../../../
bin/magento setup:upgrade --keep-generated
bin/magento setup:di:compile
```
