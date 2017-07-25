CC=g++

CFLAGS= -c -Wall 

all: run_me

run_me: main.o Body.o
	$(CC) main.o Body.o -o run_me

main.o: main.cpp
	$(CC) $(CFLAGS) main.cpp

Body.o: Body.cpp
	$(CC) $(CFLAGS) Body.cpp

clean: 
	rm -rf *o run_me
	clear
