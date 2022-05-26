#include <stdio.h>
#include "find_younger.h"

int findYounger(Starks starks, int begginning, int* p) {
    int younger = begginning;
    
    for (int i = begginning; i < *p; i++) {
        if (starks[i].age < starks[younger].age) {
            younger = i;
        }
    }
    return younger;
}
