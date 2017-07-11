#include <iostream>

using namespace std;

void test(int arg); /// pass a copy  of arg
void testAdress(int &arg); /// pass originale value operate on address
void tesAdressConst(const int &arg);

int main()
{
    int x = 2;
    int y = 3;

    test(x);
    cout << "[ x :"<< x<< " ]\n";
    testAdress(x);
    cout << "[ x :"<< x<< " ]\n";
    testAdress(x); /// the same address like above check
    tesAdressConst(y);
    cout << "[ y :"<< y<< " ]\n";
    tesAdressConst(y);

    return 0;
}

void test(int arg){
    cout << "test \n";
    cout <<"&arg :"<<&arg << endl;
    cout <<"arg :"<<arg << endl;
    cout << "-----------\n";
    arg = 13;
}

void testAdress(int &arg){
    cout << "testAdress \n";
    cout <<"&arg :"<<&arg << endl;
    cout <<"arg :"<<arg << endl;
    cout << "-----------\n";
    arg = 99;
}

void tesAdressConst(const int &arg){
    cout << "tesAdressConst \n";
    cout << "&arg :" << &arg << endl;
    cout << "arg :" << arg << endl;
    cout << "-----------\n";
    ///arg = 44;     ///*  error: assignment of ready-only reference 'arg';  *///
}
