#include <iostream>
#include "Friend.h"
#include "A.h"

using namespace std;

int getLength(Friend arg);
int pritnLength(Friend arg);
void changePrivate(Friend arg);
int funcNoFriend(Friend arg);

void privateFunc(Friend fr);

int main()
{
    Friend f;
    A a;
    f.setLength(10);

    /// 1.
    cout << "getLength : "<<getLength(f) << endl;

    /// 2.A.
    changePrivate(f);
    cout << "getLength : "<<getLength(f) << endl;

    /// 3.
    cout << "pritnLength : "<< pritnLength(f) << endl;

    /// 2.B.
    changePrivate(f);
    cout << "getLength : "<<getLength(f) << endl;

    /// 4.
    privateFunc(f);

    /// 5.
    a.show(f);

    return 0;
}

int getLength(Friend arg){return arg.length; }

int pritnLength(Friend arg){
    arg.length = 77;
    arg.privFuncForClass(); /// !!!
    return arg.length;
}

void changePrivate(Friend arg){ arg.length = 34; }

/// int funcNoFriend(Friend arg){ return arg.length; } /// error length is private !!!

void privateFunc(Friend fr){
    cout << "privateFunc :"<<fr.length << endl;
}
