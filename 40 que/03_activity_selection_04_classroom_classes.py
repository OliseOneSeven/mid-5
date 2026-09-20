classes = [(9, 10), (9, 11), (10, 12), (11, 13), (12, 14), (13, 15)]
classes.sort(key=lambda x: x[1])

selected = []
last_finish = -1

for item in classes:
    if item[0] >= last_finish:
        selected.append(item)
        last_finish = item[1]

print("Maximum classes:", selected)
print("Count:", len(selected))
