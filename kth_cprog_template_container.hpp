#ifndef VECTOR_H
#define VECTOR_H

#include <cstdlib>
#include <string>
#include <stdexcept>
#include <initializer_list>
#include <cstring>

template <typename T>
class Vector {
  public:
        
    // Default constructor
    Vector() {
      moveable();
      size_ = 0;
      capacity_ = 10;
      vec = new T[capacity_]();
    }

    // Constructor, new container for size ints
    explicit Vector(const std::size_t s) {
      moveable();
      size_ = s;
      capacity_ = size_ + 10;
      vec = new T[capacity_]();
    }

    // Copy constructor
    Vector(const Vector<T> &cpVec) {
      moveable();
      size_ = cpVec.size();
      capacity_ = cpVec.capacity();
      vec = new T[capacity_]();
      for (std::size_t i = 0; i < size_; ++i) {
        *(vec + i) = *(cpVec.vec + i);
      }
    }

    // Move constructor
    Vector(Vector<T> &&movVec) {
      moveable();
      size_ = movVec.size();
      capacity_ = movVec.capacity();
      vec = new T[capacity_]();
      std::swap(vec, movVec.vec);
      delete [] movVec.vec;
      movVec.vec = NULL;
      movVec.size_ = 0;
      movVec.capacity_ = 0;
    }

    // Constructor making a container from a list
    Vector(const std::initializer_list<T> list) {
      moveable();
      size_ = list.size();
      capacity_ = size_ + 10;
      vec = new T[capacity_]();
      for (std::size_t i = 0; i < size_; ++i) {
        *(vec + i) = *(list.begin() + i);
      }
    }

    // Constructor to initialize vector to size
    // filling it with specified element.
    explicit Vector(const std::size_t s, T elem) {
      moveable();
      size_ = s;
      capacity_ = size_ + 10;
      vec = new T[capacity_]();
      for(std::size_t i = 0; i < size_; ++i) {
	vec[i] = elem;
      }
    }

    // Destructor, free the memory held by the container
    ~Vector() {
      delete [] vec;
    }

    // Copy assignment
    void operator= (const Vector<T> &cpVec) {
      if (vec != cpVec.vec) {
        delete [] vec;
        size_ = cpVec.size();
        capacity_ = cpVec.capacity();
        vec = new T[capacity_]();
        for (std::size_t i = 0; i < size_; ++i) {
          vec[i] = cpVec.vec[i];
        }
      }
    }

    // Move assignment
    void operator= (Vector<T> &&movVec) {
      if (vec != movVec.vec) {
        delete [] vec;
        size_ = movVec.size();
        capacity_ = movVec.capacity();
        vec = new T[capacity_]();
	std::swap(vec, movVec.vec);
	delete [] movVec.vec;
        movVec.vec = NULL;
        movVec.size_ = 0;
        movVec.capacity_ = 0;
      }
    }

    // Overload [] to get access
    T& operator[] (const std::size_t index) {
      if (index >= size_) throw std::out_of_range("index out-of-bounds");
      else return *(vec + index);
    }

    // Overload [] for the case when container is const
    const T& operator[] (const std::size_t index) const {
      if (index >= size_) throw std::out_of_range("index out-of-bounds");
      else return *(vec + index);
    }

    // Return the size of the vector
    std::size_t size() const {
      return size_;
    }

    // Reset each element in the vector
    void reset() {
      delete [] vec;
      vec = new T[capacity_]();
    }

    // Adds an element to the end of the list. If there is no
    // more memory allocated, double the amount is allocated,
    // the vector copied over and the new element added.
    void push_back(T elem) {
      if (size_ >= capacity_) increase_capacity();  // More memory must be allocated
      vec[size_] = elem;
      size_ += 1;
    }

    // Inserts an element at the specified position
    void insert(std::size_t pos, T elem) {
      if (pos > size_) throw std::out_of_range("position out-of-bounds");
      else {
        if (size_ >= capacity_) increase_capacity();
        if (pos == size_) push_back(elem);  // Same as push_back
        else {
          for (std::size_t i = size_; i > pos; --i) *(vec + i) = *(vec + i - 1);
          vec[pos] = elem;
          size_ += 1;  // Size increased
        }
      }
    }

    // Clears all elements from the container, setting its size to 0
    void clear() {
      delete [] vec;
      size_ = 0;
      vec = new T[capacity_]();
    }

    // Removes the element at the specfied position
    void erase(std::size_t pos) {
      if (pos >= size_) throw std::out_of_range("position out-of-bounds");
      else {
        for (std::size_t i = pos; i < (size_ - 1); ++i) *(vec + i) = *(vec + i + 1);
        size_ -= 1;  // Size decreases
      }
    }

    // Returns the current allocated capacity of the container
    std::size_t capacity() const {
      return capacity_;
    }

    // Returns a RandomAccessIterator to the first element in the container
    // (Trying to return just a pointer to the first element)
    const T* begin() const {
      const T* const_vec = const_cast<const T*>(vec);
      return const_vec;
    }

    const T* end() const {
      const T* const_vec = const_cast<const T*>(vec);
      return const_vec + size_;
    }

    // Returns an iterator to the first element that
    // compares equal to the given parameter
    const T* find(const T &elem) const {
      for (std::size_t i = 0; i < size_; ++i) {
	if (*(vec + i) == elem) {
	  const T* const_vec = const_cast<const T*>(vec);
	  return const_vec + i;
	}
      }
      const T* const_vec = const_cast<const T*>(vec);
      return const_vec + size_;
    }
  
    T* begin() {
      return vec;
    }

    T* end() {
      return vec + size_;
    }

    // Returns an iterator to the first element that
    // compares equal to the given parameter
    T* find(const T &elem) {
      for (std::size_t i = 0; i < size_; ++i) {
        if (*(vec + i) == elem) return vec + i;
      }
      return vec + size_;
    }

  private:
    T* vec; // A pointer to the first value of the container
    std::size_t size_; // The size of the container
    std::size_t capacity_; // The capacity of the container

    void moveable() {
      static_assert(std::is_move_assignable<T>(), "Type must be move assignable");
      static_assert(std::is_move_constructible<T>(), "Type must be move constructible");
    }

    void increase_capacity() {
      capacity_ = capacity_ * 2; // Increase capacity
      T* new_vec = new T[capacity_]();
      for (std::size_t i = 0; i < size_; ++i) *(new_vec + i) = *(vec + i);
      delete [] vec;
      vec = new_vec;
    }
};

#endif
