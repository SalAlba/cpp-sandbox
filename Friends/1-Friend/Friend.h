#ifndef FRIEND_H
#define FRIEND_H


class Friend
{
    public:
        Friend();
        virtual ~Friend();

        void setLength(int len);
        friend int getLength(Friend arg);
        friend int pritnLength(Friend arg);
        friend void changePrivate(Friend arg);


    protected:

    private:
        int length;
        friend void privateFunc(Friend fr);
        void privFuncForClass();
        friend class A;
};

#endif // FRIEND_H
