# Author: YeShao
# Last change 2020-11-22 19:20 UTC+8
cd d:/learnphp
git add .
read -p "One Sentence for this commit: " whycommit
git commit -m "${whycommit}"
git push learnphp master