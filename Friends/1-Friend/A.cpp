#include <iostream>
#include "A.h"
#include "Friend.h"

using namespace std;

A::A()
{
    //ctor
}

A::~A()
{
    //dtor
}

void A::show(Friend f){
    cout<< "Friend class A : "<<f.length << endl;
    f.privFuncForClass();
}


