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
};

#endif // FRIEND_H
