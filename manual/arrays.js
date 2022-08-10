//  Criando arrays.

const notas = [1,2,30];

//  Inserindo valores.

notas.push(7);   
console.log(notas)

//  Removendo valores.

notas.pop()
console.log(notas)

//  Dividindo arrays.

const alunos = ['gabriel','rebeca','andre','alcides'];

const sala1 = alunos.slice(0,alunos.length / 2);
const sala2 = alunos.slice(alunos.length / 2);

console.log(sala1 , sala2);

//  Juntando arrays.

const salaGeral = sala1.concat(sala2);

console.log(salaGeral);


//  Alterando arrays com inclusão e remoção de valores.

alunos.splice(2,0,'vinicius');

console.log(alunos);

//  Operação de média.

let media = (notas [0] + notas [1] + notas [2]) / notas.length;
console.log(media);
