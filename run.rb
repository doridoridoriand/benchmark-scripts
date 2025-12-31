iterations = (ENV['ITERATIONS'] || '1000000000').to_i

start_time = Time.now

res = 0
for i in 0...iterations do
  res += i
end

end_time = Time.now
puts format('%.2f', end_time - start_time)
