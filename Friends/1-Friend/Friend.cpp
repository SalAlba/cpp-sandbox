#include <iostream>
#include "Friend.h"

using namespace std;

Friend::Friend()
{
    //ctor
}

Friend::~Friend()
{
    //dtor
}

void Friend::setLength(int len){ length = len;}

void Friend::privFuncForClass(){
    cout << "privFuncForClass() \n";
}
