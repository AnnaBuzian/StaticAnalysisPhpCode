#

Do the following to use the docker image, providing static analysis tools for PHP:

```sh
$ docker run -it --rm jakzal/phpqa
$ alias phpqa='docker run --init -it --rm -v $(pwd):/$USER/Sites/StaticAnalisysPhpCode/ -v $(pwd)/tmp-phpqa:/tmp -w /$USER/Sites/StaticAnalisysPhpCode/ jakzal/phpqa:alpine'
$ phpqa phpstan analyse src
```