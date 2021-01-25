import re

states = "Missisippi Alabama Texas Masachusets Kanas"
arr = states.split()
states_arr = list()

for word in arr:
    if re.search("xas$", word):
        states_arr.append(word)

for word in arr:
    if re.search("^k.*s$", word, re.I):
        states_arr.append(word)

for word in arr:
    if re.search("^M.*s$", word):
        states_arr.append(word)

for word in arr:
    if re.search("a$", word):
        states_arr.append(word)

for word in states_arr:
    print(word)

print(states)
