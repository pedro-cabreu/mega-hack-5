#!/usr/bin/env python
# coding: utf-8

# In[ ]:


from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.neural_network import MLPClassifier

import numpy as np
dataset = np.loadtxt('dados.txt', delimiter=',')
entradas = dataset[:, 1:]
saidas = dataset[:,0]
#criando uma RNA
orama = MLPClassifier(verbose=True,
                          max_iter=10000,
                          tol=0.000001,
                          activation='logistic',
                          learning_rate_init =0.0001)

#separando o dataset para treino e para teste
entradas_treino, entradas_teste, saidas_treino, saidas_teste =                          train_test_split(entradas, saidas, test_size=0.3)
print("Qtd de treino: ",len(entradas_treino))
print("Qtd de teste:  ",len(entradas_teste))
#normalizando os dados utilizando o scaler
scaler = StandardScaler()

#Calcula o mínimo e o máximo a serem usados no escalonamento
scaler.fit(entradas_treino)

#Dimensiona os valores de entrada conforme a feature_range (intervalo daquele atributo)
entradas_treino = scaler.transform(entradas_treino)
entradas_teste = scaler.transform(entradas_teste)
orama.fit(entradas, saidas)
#testa a rede neural
orama.predict(entradas_teste)
print('Score: ', orama.score(entradas_teste, saidas_teste))

