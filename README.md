# Benchmark Scripts
**NOW UNDER THE CONSTRUCTION :-)**

## Run via Docker (no local runtimes required)
Use official language images and mount this repo into `/work`.

```bash
# Python
docker run --rm -v "$PWD":/work -w /work -e ITERATIONS=1000000 python:3 python run.py

# Ruby
docker run --rm -v "$PWD":/work -w /work -e ITERATIONS=1000000 ruby:3 ruby run.rb

# PHP
docker run --rm -v "$PWD":/work -w /work -e ITERATIONS=1000000 php:8.2-cli php run.php
```
