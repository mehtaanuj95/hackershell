#include<stdio.h>
#include<time.h>
#include<string.h>
void rotateAntiClockwise(char *str,int key);
void encrypt(FILE *fp, char *keyMain);
void rotateClockwise(char *str,int key);
char *randomStringGenerator(char *key);
int main(int argc,char **argv)
{
   char key[6];
   if(argc != 2)
     {
         printf("Usage: ./a.out filename\n");
         return 1;
     }
   FILE *fp;   
   fp = fopen(argv[1],"r");
   if(fp == NULL)
    {
         printf("File not found!\nUsage: ./a.out filename\n");
         return 2;
    }
   srand(time(NULL));
   printf("Encrypting....\n"); 
   encrypt(fp,key);
   if(key == NULL)
     {
       printf("Error in encryption\n");   
       return 3;  
     }  
   printf("Enryption successful your key: %s\n",key);  
   fclose(fp);
   return 0; 
}

void encrypt(FILE *fp, char *keyMain)
{
     char key[6],word2[100],word[100],word1[100];
     int i,keyInt,len,generatedKey;
     FILE *fn;    
     randomStringGenerator(key);     
     char newFile[10];
     strcpy(newFile,"encrypt.txt");
     printf("\n");     
     keyInt = (int)key[0]+(int)key[1]+(int)key[2]+(int)key[3]+(int)key[4];   
     fn = fopen(newFile,"w");
     if(fn == NULL)
       {
            printf("Error in creating new file\n");
            keyMain = NULL;
            return;
       } 
     while(1)
       {
         strcpy(word1,"");

         if(fscanf(fp,"%s",word) == EOF)
            break;  
         
         if(word == "\n" || word == " ")
          {           
           fprintf(fn,"%s",word);
           continue;          
          }           

         len = strlen(word);
         generatedKey = keyInt % len;     

         if(strlen(word)%2 == 0)
            rotateClockwise(word,generatedKey);
         else   
            rotateAntiClockwise(word,generatedKey);

         for(i=0;i<len;i++)
             word1[i] = (char)(((int)(word[i]) + (int)(generatedKey))%256);

         word1[i] = '\0';
         strcat(word1," ");      
         fprintf(fn,"%s",word1);
         if(feof(fp))
            break;            
       } 
           
     fclose(fn);  
     strcpy(keyMain,key);
}

char *randomStringGenerator(char *key)
{
   key[0] = (char)(rand(time(NULL))%26+65);
   key[1] = (char)(rand(time(NULL))%26+97);
   key[2] = (char)(rand(time(NULL))%10+48);
   key[3] = (char)(rand(time(NULL))%26+65);
   key[4] = (char)(rand(time(NULL))%26+97);
   key[5] = '\0';
   return key;
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

