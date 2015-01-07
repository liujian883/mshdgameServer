#!/bin/bash 

#BI=0
#XU=0

#while getopts br: OPTION
#do
#    case $OPTION in
#        b)BI=$OPTARG
#        echo "bingfa is $BI"
#        ;;
#    esac
#done

siege -c $1 -r $2 -f url.txt
