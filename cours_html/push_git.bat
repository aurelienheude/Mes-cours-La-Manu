@echo off
echo --------------------------------------------------
echo ---------------   GIT PUSHINATOR   ---------------
echo --------------------------------------------------
git init 
git remote add exo3_html https://github.com/aurelienheude/exo3_html
git branch -M exo3_html
git add exo3_html
git commit -m "exercice 3"
git status 
git push origin exo3_html