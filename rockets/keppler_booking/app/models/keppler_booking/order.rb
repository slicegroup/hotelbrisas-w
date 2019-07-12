# frozen_string_literal: true

module KepplerBooking
  # Order Model
  class Order < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    acts_as_list
    acts_as_paranoid
    belongs_to :reservation

    def self.index_attributes
      %i[]
    end
  end
end
