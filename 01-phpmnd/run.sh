alias phpqa='docker run --init -it --rm -v $(pwd):/Users/annabuzian/Sites/DesignPatternsPHP/ -v $(pwd)/tmp-phpqa:/tmp -w //Users/annabuzian/Sites/DesignPatternsPHP/ jakzal/phpqa:alpine'
phpqa design-pattern ./
# /Users/annabuzian/Sites/DesignPatternsPHP/Behavioral/