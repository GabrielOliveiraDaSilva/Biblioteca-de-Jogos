# Importando a Biblioteca / Ao usar 'as' estamos colocando uma nomeclatura a biblioteca

import  numpy   as np 


# Carregando arquivos para utilização
# Caso ocorra o erro "(unicode error) 'unicodeescape'" pode ser resolvido utilizando um 'r' no inicio do do caminho(exemplo abaixo)

km = np.loadtxt(r'C:\Users\User\Desktop\Gabriel\Portfolio\visualCodeJS\alura\python\carros\carros-km.txt')

anos = np.loadtxt(r'C:\Users\User\Desktop\Gabriel\Portfolio\visualCodeJS\alura\python\carros\carros-anos.txt', dtype=int)


kmMedia = km / (2022 - anos)


# Operações em Python

num1 = 2
num2 = 3

# Adição

soma = num1 + num2
print(soma)


# Subtração

subtracao = num1 - num2
print(subtracao)


# Divisão

divisao = num1 / num2
print(divisao)


# Multiplicação

multiplicacao = num1 * num2
print(multiplicacao)


# Exponenciação (deve-se se colocar o elemento expoente)

potencia = num1 ** 3 
print(potencia)

# Resto da Divisão

restoDiv = 10 % num1
print(restoDiv)

# Retirando a parte inteira da divisão

parteInt = num2 // num1
divisaoNormal = num2 / num1
print(parteInt , divisaoNormal)

