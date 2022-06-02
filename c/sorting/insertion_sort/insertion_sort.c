#include <stdio.h>
#include <stdlib.h>
#include "../find_younger.h"
#include "../starks.h"

void insertionSort(Starks starks, int* p) {
    for (int i = 0; i < NUMBER_OF_STARKS; i++) {
        
        while (starks[i].age < starks[i-1].age && i != 0) {
            Stark current = starks[i];
            Stark behind = starks[i-1];

            starks[i] = behind;
            starks[i-1] = current;
            i--;
        }
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
    insertionSort(starks, &p);
    printStarks(starks, &p);

    exit(0);
}