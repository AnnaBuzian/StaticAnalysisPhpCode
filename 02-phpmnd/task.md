# A tool for finding problems in PHP code

```sh
$ phpqa phpmnd src/ --ignore-numbers=2,-1,10 --ignore-funcs=round,sleep \
    --exclude=tests --progress --extensions=default_parameter,-return,argument
```