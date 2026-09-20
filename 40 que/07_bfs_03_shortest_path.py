from collections import deque

graph = {
    "A": ["B", "C"],
    "B": ["A", "D"],
    "C": ["A", "D"],
    "D": ["B", "C", "E"],
    "E": ["D"]
}

start = "A"
target = "E"

queue = deque([(start, [start])])
visited = {start}

while queue:
    vertex, path = queue.popleft()

    if vertex == target:
        print("Shortest path:", path)
        break

    for node in graph[vertex]:
        if node not in visited:
            visited.add(node)
            queue.append((node, path + [node]))
