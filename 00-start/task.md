#
Do the following to use the docker image, providing static analysis tools for PHP:

```sh
$ docker run -it --rm jakzal/phpqa
$ alias phpqa='docker run --init -it --rm -v $(pwd):/$USER/Sites/StaticAnalisysPhpCode/ -v $(pwd)/tmp-phpqa:/tmp -w /$USER/Sites/StaticAnalisysPhpCode/ jakzal/phpqa:alpine'
$ alias phpStaticAnalysisProject='docker run --init -it --rm -v $(pwd):/project -v $(pwd)/tmp-phpqa:/tmp -w /project jakzal/phpqa:alpine'
$ phpqa phpstan analyse src
```

Add alias to your ~/.bashrc so it's defined every time you start a new terminal session.

```sh
$ nano ~/.bashrc
$ source ~/.bashrc
```