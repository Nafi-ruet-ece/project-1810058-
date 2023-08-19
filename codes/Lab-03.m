clear all
clc
x =input('enter the value of x');
R= input('enter the value of Y');
y=[];
for i=length(R):-1:1
    Y=R(i);
    y=[y Y];
end
p=[];
k=zeros(1,7);
m=length(x)
n=length(y)
l=0;
q=1;
for i=1:m
    for j=1:n
        z(i,j)=y(i).*x(j);
    end 
end
for i=1:m
 p=i;

    for j=1:n 
        k(i)=k(i)+z(p,j);
        p=p-1;
        if p==0
            break
        end
      
        if i>=j 
            continue
        else 
            break    
       end
    end    
end
q=1;
for i=m+1:m+n-1

       p=4;
       q=q+1;
            for j=q:n
             k(i)=k(i)+z(p,j);
             p=p-1;
            end
end
j=xcorr(x,x);
subplot(3,1,1);
stem(x);
subplot(3,1,2);
stem(k);
subplot(3,1,3);
stem(j);