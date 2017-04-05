#include<stdio.h>
#include<time.h>
#include<string.h>

void rotateAntiClockwise(char *str,int key);
void rotateClockwise(char *str,int key);
void decrypt(FILE *fp, char *key);

int main(int argc,char **argv)
{
   char key[6];
   if(argc != 3)
     {
         printf("Usage: ./a.out filename key\n");
         return 1;
     }
   FILE *fp;
   fp = fopen(argv[1],"r");
   if(fp == NULL)
    {
         printf("File not found!\nUsage: ./a.out filename key\n");
         return 2;
    }

   printf("Decrypting....\n"); 
   strcpy(key,argv[2]);

   decrypt(fp,key);
   
   if(key == NULL)
     {
       printf("Error in encryption\n");   
       return 3;  
     }
       
   printf("Decryption successful\n");    
   fclose(fp);
   return 0; 
}

void decrypt(FILE *fp, char *key)
{
     char word[100],word1[100];
     int i,keyInt,len,generatedKey;
     FILE *fn;     
     char newFile[25];
 
     strcpy(newFile,"decrypt.txt");
     keyInt = (int)key[0]+(int)key[1]+(int)key[2]+(int)key[3]+(int)key[4];
     fn = fopen(newFile,"w");
     if(fn == NULL)
       {
            printf("Error in creating new file\n");            
            return;
       } 
     while(1)
       {
         strcpy(word1,"");

         if(fscanf(fp,"%s",word) == EOF)
            break;          

         if(word == "\n" || word == " ")
          {
            continue;          
            fprintf(fn,"%s",word);
          }           

         len = strlen(word);
         generatedKey = keyInt % len;     
         for(i=0;i<len;i++)
             word1[i] = (char)((int)(word[i]) - (int)(generatedKey));
         word1[i] = '\0';
         

         if(strlen(word1)%2 != 0)
            rotateClockwise(word1,generatedKey);
         else   
            rotateAntiClockwise(word1,generatedKey);
         strcat(word1," ");
                         
         fprintf(fn,"%s",word1);          
       }      
       
     fclose(fn);  
}

void rotateClockwise(char *str,int key)
{
   int len = strlen(str);
   char copy[len];
   int i,j;
   
   for(j=0;j<key;j++)
    {
     strcpy(copy,""); 
     
     for(i=0;i<len;i++)
      {       
       if(i == len-1)       
        copy[0] = str[len-1];
       else 
        copy[i+1] = str[i]; 
      }
      
      copy[i] = '\0';
      strcpy(str,copy);
    }     
}

void rotateAntiClockwise(char *str,int key)
{   
   int len = strlen(str);
   char copy[len];
   int i,j;
   for(j=0;j<key;j++)
    { 
     strcpy(copy,""); 

     for(i=0;i<len;i++)
       {  
         if(i == 0)         
          copy[len-1] = str[i];
         else
          copy[i-1] = str[i];                  
       }
       
      copy[i] = '\0'; 
      strcpy(str,copy); 
     }     
}


