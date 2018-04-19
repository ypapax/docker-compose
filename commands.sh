#!/usr/bin/env bash
set -ex

up(){
    docker-compose up
}

background(){
    docker-compose up -d
}

ps(){
    docker ps
}

stop(){
    docker-compose stop
}

$@