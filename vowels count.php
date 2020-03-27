<?php
def getCount(inputStr):
    num_vowels = 0
    # your code here
    inputStr_min =inputStr.lower()
    vowels=["a","e","i","o","u"]
    for letter in inputStr_min :
        if letter in vowels :
            num_vowels+=1


    return num_vowels;