ver Branch - git branch

git commit -am 'second commit' - add + commit 

Revertendo Modificações

1- git log
2-git reset -soft 'commit' - alterações ficam preparadas para commit - volta ao estado antes do commit
2-git reset -mixed 'commit' -alteraçõess não preparadas para commit - tem que dar add outra vez
2-git reset -hard 'commit' - perde as alterações