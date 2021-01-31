import re
states = 'Mississippi Alabama Texas Massachusetts Kansas'
statesarr = states.split()
stateList = []
for val in statesarr:
    if re.search('xas$', val):
        stateList.append(val)
for val in statesarr:
    if re.search('^k.*s$', val, re.I):
        stateList.append(val)
for val in statesarr:
    if re.search('^M.*s$', val):
        stateList.append(val)
for val in statesarr:
    if re.search('a$', val):
        stateList.append(val)
for val in stateList:
    print(val)
print(states)
