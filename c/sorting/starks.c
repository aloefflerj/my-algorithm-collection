#include <stdio.h>
#include <string.h>
#include "starks.h"

void newStark(Starks starks, char name[20], int age, int* p) {
    Stark newStark;
    strcpy(newStark.name, name);
    newStark.age = age;

    starks[*p] = newStark;
    *p = *p + 1;
}

void printStarks(Starks starks, int* p) {
    printf("\n\n## Starks ##\n");
    for (int i = 0; i < *p; i++) {
        printf("%s has %d years in the book\n", starks[i].name, starks[i].age);
    }
}
