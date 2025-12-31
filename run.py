import os
import time

start_time = time.time()

iterations = int(os.getenv('ITERATIONS', '1000000000'))
res = 0
for i in range(iterations):
    res = res + i

end_time = time.time()

print('{:.2f}'.format(end_time - start_time))
