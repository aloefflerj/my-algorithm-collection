#include <stdio.h>
#include <stdlib.h>
#include "find_younger.h"
#include "starks.h"

void selectionSort(Starks starks, int* p) {
    for (int i = 0; i < *p; i++) {
        int youngerPosition = findYounger(starks, i, p);

        Stark current = starks[i];
        Stark younger = starks[youngerPosition];
        starks[i] = younger;
        starks[youngerPosition] = current;
    }
}

int main() {

    int p = 0;

    Starks starks;
    newStark(starks, "Arya", 9, &p);
    newStark(starks, "Sansa", 11, &p);
    newStark(starks, "Jon Snow", 14, &p);
    newStark(starks, "Eddard", 35, &p);
    newStark(starks, "Bran", 7, &p);
    newStark(starks, "Rickon", 3, &p);
    newStark(starks, "Robb", 14, &p);
    newStark(starks, "Catelyn", 34, &p);

    printStarks(starks, &p);
    selectionSort(starks, &p);
    printStarks(starks, &p);

    exit(0);
}

