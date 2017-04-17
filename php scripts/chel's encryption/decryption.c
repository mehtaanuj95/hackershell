#include<stdio.h>

int main(int argc,char* argv[])
{

int t;
FILE *fp,*fp1;
char fname[1000],a;
fp=fopen(argv[1],"r");
fp1=fopen(argv[1],"r+");

while(fscanf(fp,"%c",&a)!=EOF)
{
int x=(int)a;
x=x-50;
fprintf(fp1,"%c",(char)x);
}
fclose(fp);
fclose(fp1);

}
