#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void split(char *src, const char *separator, char **dest, int *num)
{
    char *pSeparator, *pStart, *pEnd;
    unsigned int sep_len;
    int count = 0;

    if (src == NULL || strlen(src) == 0) return;

    pSeparator = (char *)malloc(16);
    if (pSeparator == NULL) return;

    if (separator == NULL || strlen(separator) == 0) strcpy(pSeparator," ");/* one blank by default */
    else strcpy(pSeparator,separator);

    sep_len = strlen(pSeparator);

    pStart = src;

    while(1)
    {
        pEnd = strstr(pStart, pSeparator);
        if (pEnd != NULL)
        {
            memset(pEnd,'/0',sep_len);
            *dest++ = pStart;
            pEnd = pEnd + sep_len;
            pStart = pEnd;
            ++count;
        }
        else
        {
            *dest = pStart;
            ++count;
            break;
        }
    }

    *num = count;

    if (pSeparator != NULL) free(pSeparator);
}

int main()
{
    char src[] = "Accsvr:tcp  -h    127.0.0.1    -p    20018";
    char *dest[128];
    char *dest2[128];
    int num = 0, num2 = 0;
    int i, j;

    split(src,":",dest,&num);

    for (i=0;i<num;++i)
    {
        printf("|%s|/n",dest[i]);
        split(dest[i],"/t",dest2,&num2);
        for (j=0;j<num2;++j)
        {
            printf("|%s|/n",dest2[j]);
        }
    }

    return 0;
}
