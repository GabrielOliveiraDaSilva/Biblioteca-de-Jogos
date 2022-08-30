# Trabalhando com listas

jogos = ['LOL', 'Dota' , 'Zelda', 'Dark Souls', 'Horizon', 'Minecraft']

# Ajusta a lista em ordem alfabética
jogos.sort()

print(jogos)

# Inclui um novo valor a lista, na ultima posição
jogos.append('Valorant')

print(jogos)

# Retira o ultimo item da lista, a menos que seja passado um parâmetro
jogos.pop()

print(jogos)

# Cria uma cópia da lista original sem modifica-la
jogos2 = jogos.copy()
jogos2.pop(2)

print(jogos2)



# Trabalahando com FOR


# Criamos a variavel com lista

quadrado = []

# Criamos uma variavel itens com nossos novos valores

for itens in range (10) :
    quadrado.append(itens)


# Verificando uma lista dentro de uma lista
dados = [ 
    ['Piloto automático','Rodas de liga', 'Travas elétricas', 'Piloto automático', 'Bancos de couro', 'Ar condicionado', 'Sensor de estacionamento', 'Sensor crepuscular', 'Sensor de chuva'],
    ['Central multimídia', 'Piloto automático','Teto panorâmico', 'Freios ABS', '4 X 4', 'Painel digital', 'Piloto automático', 'Bancos de couro', 'Câmera de estacionamento'],
    ['Piloto automático', 'Controle de estabilidade', 'Sensor crepuscular', 'Freios ABS', 'Câmbio automático', 'Bancos de couro', 'Central multimídia', 'Vidros elétricos']
]

#for lista in dados :
#    for item in lista :
#        print(item)


# Incluindo itens dentro da lista

acessorios = []

for lista in dados :
    for item in lista :
        acessorios.append(item)




# Trabalhando com IF

# 1º item da lista - Nome do veículo
# 2º item da lista - Ano de fabricação
# 3º item da lista - Veículo é zero km?

dados1 = [
    ['Jetta Variant', 2003, False],
    ['Passat', 1991, False],
    ['Crossfox', 1990, False],
    ['DS5', 2019, True],
    ['Aston Martin DB4', 2006, False],
    ['Palio Weekend', 2012, False],
    ['A5', 2019, True],
    ['Série 3 Cabrio', 2009, False],
    ['Dodge Jorney', 2019, False],
    ['Carens', 2011, False]
]


# Verificando valores com base em comparação

for lista in dados1 :
    if(lista[2] == False) :
        print(lista)

# Criando novas listas com IF

listaF = []
listaT = []

for lista in dados1 :
    if(lista[2] == False) :
        listaF.append(lista) 
    else: 
        listaT.append(lista)

    



