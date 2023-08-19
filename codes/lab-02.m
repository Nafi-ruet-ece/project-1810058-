clear all
clc
x = [1 2 3 4];
y =  [4 4 3 2];
p=[];
k=zeros(1,8);
m=length(x)
n=length(y)
l=0;
q=1;
for i=1:m
    for j=1:n
        z(i,j)=y(i).*x(j);
    end 
end
for i=1:4
 p=i;

    for j=1:4
        
       
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
for i=5:7

       p=4;
       q=q+1;
            for j=q:4
             k(i)=k(i)+z(p,j);
             p=p-1;
            
       
            end
end





    

         
         

