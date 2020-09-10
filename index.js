let load=document.getElementById('type');
const text="We Create Awsome foods";
let i=0;
setInterval(load, 100);
function load() {
 if (i<text.length) {
  document.getElementById('type').innerHTML+=text.charAt(i);
 }
   
}
name = input("Enter file:")
if len(name) < 1 : name = "mbox-short.txt"
handle = open(name)
counts=dict()
for line in handle:
    if not line.startswith('From'):
                           continue
    else:
        
        line=line.split()
        line=line[5]
        line=line[0:2]
     
    
    counts[line]=counts.get(line,0)+1
 
for hour,count in sorted(counts.items()):
    print(hour,count)