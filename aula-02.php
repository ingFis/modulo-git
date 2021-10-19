ver Branch - git branch

git commit -am 'second commit' - add + commit 

1- Revertendo Modificações

1.1- git log
1.2-git reset -soft 'commit o que vai apagar' - alterações ficam preparadas para commit - volta ao estado antes do commit
1.2-git reset -mixed 'commit o último que é para ficar' -alteraçõess não preparadas para commit - tem que dar add outra vez
1.2-git reset -hard 'commit' - perde as alterações

2 -Trabalhando com diferentes Branches

git branch nome - Cria novo histórico a partir do master

git checkout nome - para trocar de branch

se commitar em outra branch e depois voltar para a master ela não terá reconhecido 

3 - 
    git diff - ver diferença nos arquivos
    git diff --name-only - ver apenas os nomes dos arquivos alterados
    git diff nome_arquivo - ver apenas um arquivo
    git checkout HEAD -- nome_arquivo - para voltar alterações de um arquivo

