meetings = [
    ("M1", 9, 10),
    ("M2", 9, 11),
    ("M3", 10, 12),
    ("M4", 11, 13),
    ("M5", 12, 14)
]

meetings.sort(key=lambda x: x[2])

selected = []
last_finish = -1

for name, start, finish in meetings:
    if start >= last_finish:
        selected.append(name)
        last_finish = finish

print("Selected meetings:", selected)
