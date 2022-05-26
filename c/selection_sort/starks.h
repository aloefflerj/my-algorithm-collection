#ifndef _STARKS_H_
#define _STARKS_H_

#define NUMBER_OF_STARKS 8

struct stark {
    char name[20];
    int age;
};

typedef struct stark Stark;

typedef Stark Starks[NUMBER_OF_STARKS];

void newStark(Starks starks, char name[20], int age, int* p);
void printStarks(Starks starks, int* p);

#endif