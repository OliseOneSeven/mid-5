from collections import deque

cities = {
    "Ahmedabad": ["Vadodara", "Rajkot"],
    "Vadodara": ["Ahmedabad", "Surat"],
    "Rajkot": ["Ahmedabad", "Jamnagar"],
    "Surat": ["Vadodara", "Mumbai"],
    "Jamnagar": ["Rajkot"],
    "Mumbai": ["Surat"]
}

start = "Ahmedabad"
target = "Mumbai"

queue = deque([(start, [start])])
visited = {start}

while queue:
    city, path = queue.popleft()

    if city == target:
        print("Route:", " -> ".join(path))
        break

    for next_city in cities[city]:
        if next_city not in visited:
            visited.add(next_city)
            queue.append((next_city, path + [next_city]))
