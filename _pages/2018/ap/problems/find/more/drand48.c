#define _XOPEN_SOURCE

#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    srand48(0);
    printf("%f %f %f\n", drand48(), drand48(), drand48());

    srand48(1);
    printf("%f %f %f\n", drand48(), drand48(), drand48());

    srand48(0);
    printf("%f %f %f\n", drand48(), drand48(), drand48());
}
