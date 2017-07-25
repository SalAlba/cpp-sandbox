all: run_me

run_me: main.o Body.o
	g++ main.o Body.o -o run_me

main.o: main.cpp
	g++ -c main.cpp

Body.o: Body.cpp
	g++ -c Body.cpp

clean: 
	rm -rf *o run_me
